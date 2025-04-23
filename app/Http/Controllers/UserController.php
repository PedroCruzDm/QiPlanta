<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	// Exibe uma lista de usuários
	public function index()
	{
		$users = User::all();
		return response()->json($users);
	}

	// Exibe um único usuário
	public function show($id)
	{
		$user = User::find($id);

		if (!$user) {
			return response()->json(['message' => 'User not found'], 404);
		}

		return response()->json($user);
	}

	// Cria um novo usuário
	public function store(Request $request)
	{


		$validatedData = $request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|string|min:6',
			'endereco' => 'required|string|max:255', // Validação do endereço
			'numcell' => 'required|string|max:15',  // Validação do número do celular
		]);


		$user = User::create([
			'name' => $validatedData['name'],
			'email' => $validatedData['email'],
			'password' => bcrypt($validatedData['password']),
		]);

		return response()->json($user, 201);
	}

	// Atualiza um usuário existente
	public function update(Request $request, $id)
	{
		$user = User::find($id);

		if (!$user) {
			return response()->json(['message' => 'User not found'], 404);
		}

		$validatedData = $request->validate([
			'name' => 'sometimes|string|max:255',
			'email' => 'sometimes|email|unique:users,email,' . $user->id,
			'password' => 'sometimes|string|min:6',
		]);

		if (isset($validatedData['password'])) {
			$validatedData['password'] = bcrypt($validatedData['password']);
		}

		$user->update($validatedData);

		return response()->json($user);
	}

	// Remove um usuário
	public function destroy($id)
	{
		$user = User::find($id);

		if (!$user) {
			return response()->json(['message' => 'User not found'], 404);
		}

		$user->delete();

		return response()->json(['message' => 'User deleted successfully']);
	}
}
