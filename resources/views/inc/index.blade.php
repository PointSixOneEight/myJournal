<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>My Journal</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset ('resources/css/mdb.min.css ') }}"/>
  <!-- Data tables-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
  <!--J Query-->
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset ('resources/css/admin.css') }}" />
  <link rel="stylesheet" href="{{ asset ('resources/css/datatable.css') }}" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>

</head>

<body>
    {{View::make('inc.header')}}  
        @yield('content')
   



        
 <!-- MDB -->
 <script type="text/javascript" src="{{ asset ('resources/js/mdb.min.js') }}"></script>
  <!-- Custom scripts -->
 <script type="text/javascript" src="{{ asset ('resources/js/admin.js') }}"></script>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script>
    $(document).ready( function () {
    
        $('#myTable ').DataTable({
          
          "ordering": false,
          scrollY:        520,
          scrollCollapse: true,
         
          
        });
        
        $('#buy').DataTable({
           pageLength : -1,
          lengthMenu: [[-1,5, 10, 20], ['Show all' ,5, 10, 20 ]],
          scrollY:        200,
          scrollCollapse: true     
        });

        $('#sell').DataTable({
          pageLength : -1,
          lengthMenu: [[-1,5, 10, 20], ['Show all' ,5, 10, 20 ]],
          scrollY:        200,
          scrollCollapse: true
        });
       
    

    } );
 </script>


 
</body>
</html>