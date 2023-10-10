<?php
$post = file_get_contents("https://api.cekmutasi.co.id/v1/?api");
$json = json_decode($post);
if( $json->action == "payment_report" )
{
    foreach( $json->content->data as $data )
    {
        # Waktu transaksi dalam format unix timestamp
        $time = $data->unix_timestamp;

        # Tipe transaksi : credit / debit
        $type = $data->type;

        # Jumlah (2 desimal) : 50000.00
        $amount = $data->amount;

        # Berita transfer
        $description = $data->description;

        # Saldo rekening (2 desimal) : 1500000.00
        $balance = $data->balance;
        
        if( $type == "credit" )
        {
            if( $amount == $jumlahTagihan )
            {
                # Sistem Anda
            }
        }
    }
}
?>