<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\User;

use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    public function generateQRCode(Request $request)
    {
        $data = $request->input('data');
        $size = $request->input('size', 200);
        $errorCorrectionLevel = $request->input('error_correction_level', 'L');

        // Generate the QR code
        $qrCode = \QrCode::format('png')
            ->size($size)
            ->errorCorrection($errorCorrectionLevel)
            ->generate($data);

        // Return the QR code as a response
        return response($qrCode)->header('Content-Type', 'image/png');
    }

    public function index()
    {
        $produtos = Produto::all(); // Busca Produtos no Banco de Dados
        return view('qrcode', ['produtos' => $produtos]);
    }
    public function showQRCode($data)
    {
        $qrCode = \QrCode::format('png')
            ->size(200)
            ->errorCorrection('L')
            ->generate($data);

        return response($qrCode)->header('Content-Type', 'image/png');
    }
    public function showQRCodePage()
    {
        return view('qrcode');
    }
    public function showQRCodePageWithData($data)
    {
        return view('qrcode', ['data' => $data]);
    }   
    public function showQRCodePageWithDataAndSize($data, $size)
    {
        return view('qrcode', ['data' => $data, 'size' => $size]);
    }
    public function showQRCodePageWithDataSizeAndErrorCorrection($data, $size, $errorCorrectionLevel)
    {
        return view('qrcode', ['data' => $data, 'size' => $size, 'errorCorrectionLevel' => $errorCorrectionLevel]);
    }
}
