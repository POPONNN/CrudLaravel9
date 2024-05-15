@extends('layouts.app')
@section('content')
<div class="container mt-3">
   <h2>Data Siswa XI RPL C</h2>
   <table class="table table-striped">
   <thead>
         <tr>
            <th>No</th>
                <th >Nama</th>
                <th>NIS</th>
                <th>Alamat</th>
         </tr>
      </thead>
       <tbody>
            <tr>
                <td>1</td>
                <td>Nikolas</td>
                <td>1234</td>
                <td>Karangan</td>
                <td><img src="{{ asset('IMG/niklas.jpeg') }}"alt=""width="100"></td>
            </tr>
            <tr>
               <td>2</td>
                <td>Novian</td>
                <td>5678</td>
                <td>Tugu</td>
                <td><img src="{{ asset('IMG/niklas.jpeg') }}"alt=""width="100"></td>
            </tr>
            <tr>
               <td>3</td>
                <td>Prassetya</td>
                <td>9012</td>
                <td>Tugu</td>
                <td><img src="{{ asset('IMG/pras.jpeg') }}"alt=""width="100"></td>
            </tr>
            <tr>
               <td>4</td>
                <td>Octavian</td>
                <td>3456</td>
                <td>Sumber ringin</td>
                <td><img src="{{ asset('IMG/kikik.jpeg') }}"alt=""width="100"></td>
            </tr>
            <tr>
               <td>5</td>
                <td>Nizar</td>
                <td>7890</td>
                <td>Pule</td>
                <td><img src="{{ asset('IMG/rifan.jpeg') }}"alt=""width="100"></td>
            </tr>
            <tr>
               <td>6</td>
                <td>Yudi</td>
                <td>2345</td>
                <td>Tugu</td>
                <td><img src="{{ asset('IMG/yudi.jpeg') }}"alt=""width="100"></td>
            </tr>
            <tr>
               <td>7</td>
                <td>Mige</td>
                <td>6789</td>
                <td>Karangan</td>
                <td><img src="{{ asset('IMG/mige.jpeg') }}"alt=""width="100"></td>
            </tr>
            <tr>
               <td>8</td>
                <td>Nandito</td>
                <td>0123</td>
                <td>Karangan</td>
                <td><img src="{{ asset('IMG/nandito.jpeg') }}"alt=""width="100"></td>
            </tr>
            <tr>
               <td>9</td>
                <td>Nico</td>
                <td>4567</td>
                <td>Gandusari</td>
                <td><img src="{{ asset('IMG/nico.jpeg') }}"alt=""width="100"></td>
            </tr>
         </tbody>

   </table>
</div>
@endsection

</body>
</html>