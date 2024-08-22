<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="C:/xampp/htdocs/myLaravel/resources/css/main.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<title>RemittanceDex</title>
	</head>
	<body>
        <div class="container justify-content-center">
            
            @if (count ($test) >0 )
            <div class="row">
                <div class="col-4"  >&nbsp;</div>
            <div class="col-lg-6">
                <a href="/"><img src="{{asset('Image\REMDex.png')}}" style="width: 350px;height: auto;" ></a>
                
            </div>
            <div class="row">
                <div class="col-8">&nbsp;</div>
                <div class="col-lg-3">
                <a href="/">
                    <button type="button" class="btn btn-outline-primary btn-sm col-5">Back gun</button>
                </a>
            </div>
            </div>
            </div>
            <div>&nbsp;</div>
                <div class="row">
                    <div class="col-3">&nbsp;</div>
                    <div class="card text-center col-lg-6" >
                        
                            @foreach ($test as $p)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Refno</th>
                                            <td class="col text-end">{{ $p->Reference_Number}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Nominal Transaksi Outgoing </th>
                                            <td class="col text-end">{{ $p->Nominal_Transaksi_Outgoing}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start ">Tanggal Transaksi Outgoing </th>
                                            <td class="col text-end">{{ $p->Tanggal_Transaksi_Outgoing}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table >
                                        <tr>
                                            <th scope="row"class="text-start">No Rekening Sumber </th>
                                            <td class="col text-end">{{ $p->No_Rekening_Sumber}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Nama Pengirim </th>
                                            <td class="col text-end">{{ $p->Nama_Pengirim}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">No ID Pengirim </th>
                                            <td class="col text-end">{{ $p->No_ID_Pengirim}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">WN Pengirim </th>
                                            <td class="col text-end">{{ $p->WN_Pengirim}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Telepon Pengirim </th>
                                            <td class="col text-end">{{ $p->Telepon_Pengirim}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Jenis Nasabah Penerima </th>
                                            <td class="col text-end">{{ $p->Jenis_Nasabah_Penerima}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Jenis Nasabah Pengirim</th>
                                            <td class="col text-end">{{ $p->Jenis_Nasabah_Pengirim }}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Nama Penerima </th>
                                            <td class="col text-end">{{ $p->Nama_Penerima}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Nomor ID Penerima </th>
                                            <td class="col text-end">{{ $p->Nomor_ID_Penerima}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">WN Penerima </th>
                                            <td class="col text-end">{{ $p->WN_Penerima}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Alamat Penerima </th>
                                            <td class="col text-end">{{ $p->Alamat_Penerima}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Tujuan Transaksi </th>
                                            <td class="col text-end">{{ $p->Tujuan_Transaksi}}</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="list-group-item">
                                    <table>
                                        <tr>
                                            <th scope="row" class="text-start">Remark </th>
                                            <td class="col text-end">{{ $p->Remark}}</td>
                                        </tr>
                                    </table>
                                </li>
                              </ul>
                            @endforeach
                        </div>
                    </div>
                        @else
                        <div>&nbsp;</div>
                            <div>
                                <div class="row">
                                <div class="col-lb-6">
                                    <a href="/"></a>
                                    <img src="{{asset('Image\pngwing.com.png')}}" class="poke-logo">
                                    
                            </div>
                        </div>
                        <div>&nbsp;</div>
                        <div class="row">
                            <div class="col-3">&nbsp;</div>
                            <div class="col-lg-6">
                                <h4>Your Transaction Not Found <a href="/" style="color: black">"BABY"</a></h4>
                            
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-8">&nbsp;</div>
                            <div class="col-lg-3">
                            <a href="/">
                                <button type="button" class="btn btn-outline-primary btn-sm col-5">Back gun</button>
                            </a>
                        </div>
                        </div>
                            </div>
                        @endif
        
                    
           


        </div>
        <div>&nbsp;</div>
       <footer>

    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      </ul>
      <p class="text-center text-muted">Copyright © 2024 Remittance INA, Corp</p>
    
       </footer>
        <script
        src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
        ></script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"/>
	</body>
</html>