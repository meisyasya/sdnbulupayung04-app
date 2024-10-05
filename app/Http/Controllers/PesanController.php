<?php
namespace App\Http\Controllers;
use App\Models\TwilioNumber;
use App\Models\WaliMurid;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class PesanController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $name = $request->input('name');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // Setup Twilio Client
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilio = new Client($sid, $token);

        // Format pesan yang akan dikirim
        $body = "Pesan dari: $name\nNo Telp: $phone\nSubjek: $subject\nPesan: $message";

        try {
            // Kirim pesan ke WhatsApp admin
            $twilio->messages->create(
                env('WHATSAPP_ADMIN_NUMBER'), // Nomor WhatsApp admin
                [
                    'from' => env('TWILIO_WHATSAPP_FROM'), // Nomor WhatsApp pengirim (dari Twilio)
                    'body' => $body,
                ]
            );

            // Jika berhasil, kembali dengan pesan sukses
            return back()->with('success', 'Pesan berhasil dikirim ke WhatsApp!');
        } catch (\Exception $e) {
            // Jika gagal, tampilkan pesan error
            return back()->with('error', 'Gagal mengirim pesan: ' . $e->getMessage());
        }
    }
}
