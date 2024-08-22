<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Search;
use DB ;
class controllerSearch extends Controller
{
    // function __construct(Search $search)
    // {
    //     $this->search = $Brifast;
    // }
 
    public function cari(Request $request)
	{
		// menangkap data pencarian
        
        $cari = $request->input('cari');
    	// mengambil data dari table pegawai sesuai pencarian data
		$data['refno'] = DB::connection('mysql')
        ->table('p_transaction')
		->where('REFNO','like',"%".$cari."%")
        ->get();
        $query="SELECT a.BRANCH AS 'Unit_Kerja_Transaksi',a.REFNO AS 'Reference_Number',a.DEBETACCNO AS 'No_Rekening_Sumber',jSender.DESCRIPTION AS 'Jenis_Nasabah_Pengirim',sender.NAME AS 'Nama_Pengirim',sender.IDNUMBER AS 'No_ID_Pengirim',cSender.DESCRIPTION AS 'WN_Pengirim',sender.PHONE AS 'Telepon_Pengirim',CONCAT(a.CURRENCY,' ',a.AMOUNT) AS 'Nominal_Transaksi_Outgoing',a.TRANSACTIONDATE AS 'Tanggal_Transaksi_Outgoing',jBenef.DESCRIPTION AS 'Jenis_Nasabah_Penerima',benef.NAME AS 'Nama_Penerima',benef.IDNUMBER AS 'Nomor_ID_Penerima',cBenef.DESCRIPTION AS 'WN_Penerima',benef.ADDRESS AS 'Alamat_Penerima',trxPur.DESCRIPTION AS 'Tujuan_Transaksi',a.REMARK AS 'Remark',SoF.DESCRIPTION AS 'Keterangan_Sumber_Dana'FROM ((((((((p_transaction a JOIN reff_member sender) JOIN reff_member benef) JOIN md_transferpurpose trxPur) JOIN md_jenis_nasabah jSender) JOIN brifast.md_country cSender) JOIN md_jenis_nasabah jBenef) JOIN brifast.md_country cBenef) JOIN md_sumberdana SoF)where ((a.ROWID_SENDER = sender.ROWID_MEMBER) AND (sender.ROWID_JENISNASABAH = jSender.ROWID_JENIS_NASABAH) AND  (sender.COUNTRY = cSender.IDCOUNTRY) AND (a.ROWID_BENEFICIARY = benef.ROWID_MEMBER) AND  (benef.ROWID_JENISNASABAH = jBenef.ROWID_JENIS_NASABAH) AND  (benef.COUNTRY = cBenef.IDCOUNTRY) AND  (a.TRANSFER_PURPOSE = trxPur.ROWID) AND  (a.KETERANGAN_SUMBER_DANA = SoF.ROWID))AND (refno = '".$cari."' OR REFNOCP_ORIGINAL = '".$cari."' OR original_uetr = '".$cari."')ORDER BY a.trxid ASC;";
    	$dt['test'] = DB::connection('mysql')->select($query);
        // dd($dt);
        // mengirim data pegawai ke view index
		return view('BrifastView',$dt);
 
	}
}
