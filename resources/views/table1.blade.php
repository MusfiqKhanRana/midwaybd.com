<x-indexCOM>
    @section('content')
    <div class="container" style="padding-top: 5%;">
        <h2>Info Table</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>fn1</th>
                        <th>ln1</th>
                        <th>fn2</th>
                        <th>ln2</th>
                        <th>fn3</th>
                        <th>ln3</th>
                        <th>fn4</th>
                        <th>ln4</th>
                        <th>adrs</th>
                        <th>eml1</th>
                        <th>pcode</th>
                        <th>mnmbr</th>
                        <th>ntnlty</th>
                        <th>simg</th>
                        <th>NIDimg</th>
                        <th>DOB</th>
                        <th>job</th>
                        <th>state</th>
                        <th>country</th>
                        <th>eml2</th>
                        <th>NIDno</th>
                        <th>psimg</th>
                        <th>bankname</th>
                        <th>BAnmbr</th>
                        <th>Bname</th>
                        <th>Rnmbr</th>
                        <th>psimg2</th>
                        <th>rltn</th>
                        <th>name</th>
                        <th>phnnmbr</th>
                        <th>deposit</th>
                        <th>cmnt</th>
                        <th>ssimg</th>
                    </tr>
                </thead>
                @foreach($Pages as $Page)
                <tbody>
                    <tr>
                        <td>{{$Pages['fn1']}}</td>
                        <td>{{$Pages['ln1']}}</td>
                        <td>{{$Pages['fn2']}}</td>
                        <td>{{$Pages['ln2']}}</td>
                        <td>{{$Pages['fn3']}}</td>
                        <td>{{$Pages['ln3']}}</td>
                        <td>{{$Pages['fn4']}}</td>
                        <td>{{$Pages['ln4']}}</td>
                        <td>{{$Pages['adrs']}}</td>
                        <td>{{$Pages['eml1']}}</td>
                        <td>{{$Pages['pcode']}}</td>
                        <td>{{$Pages['mnmbr']}}</td>
                        <td>{{$Pages['ntnlty']}}</td>
                        <td>{{$Pages['fn1']}}</td>
                        <td>{{$Pages['fn1']}}</td>
                        <td>{{$Pages['DOB']}}</td>
                        <td>{{$Pages['job']}}</td>
                        <td>{{$Pages['state']}}</td>
                        <td>{{$Pages['country']}}</td>
                        <td>{{$Pages['eml2']}}</td>
                        <td>{{$Pages['NIDno']}}</td>
                        <td>{{$Pages['fn1']}}</td>
                        <td>{{$Pages['bankname']}}</td>
                        <td>{{$Pages['BAnmbr']}}</td>
                        <td>{{$Pages['Bname']}}</td>
                        <td>{{$Pages['Rnmbr']}}</td>
                        <td>{{$Pages['fn1']}}</td>
                        <td>{{$Pages['rltn']}}</td>
                        <td>{{$Pages['name']}}</td>
                        <td>{{$Pages['phnmbr']}}</td>
                        <td>{{$Pages['deposit']}}</td>
                        <td>{{$Pages['cmnt']}}</td>
                        <td>{{$Pages['fn1']}}</td>

                    </tr>
                </tbody>
                 @endforeach
            </table>
        </div>
    </div>
  
        <br><br>
        <div style="text-align: center;padding-bottom:2%;"><button type="button" class="btn btn-outline-secondary"> <a href="{{ url('/prnpriview') }}" class="btnprn btn">Print Preview</a></button></div>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.btnprn').printPage();
        });
        </script>

    @endsection
</x-indexCOM>