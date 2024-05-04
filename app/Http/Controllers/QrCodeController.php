<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRendererInterface;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use BaconQrCode\Renderer\GDLibRenderer;


class QrCodeController extends Controller
{
    public function generate($id)
    {
        $tmpFilePath = public_path('temp/qrcode.png');

        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );

        $writer = new Writer($renderer);
        $link = route('tanaman', $id);

        $writer->writeFile($link, $tmpFilePath);

        // Unduh QR code
        return response()->download($tmpFilePath)->deleteFileAfterSend(true);
    }
}
