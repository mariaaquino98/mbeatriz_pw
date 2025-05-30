<?php
   include_once("./config/database/database.php");
 ?>
 <!doctype html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <title>CRUD - RESERVAS</title>
   </head>
   <body class="container">
     <h1 class="text-left py-4">
     <i class="bi bi-telegram"></i>
     Reserva de Salas
   </h1>

   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
     <i class="bi bi-plus-circle"></i>  
     Adicionar nova Reserva


     </button>
</form>

 
        <table class="table table-striped table-hover table-bordered mt-4">
   <thead>
     <tr class="text-left">
       <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-right-square-fill" viewBox="0 0 16 16">
  <path d="M14 16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2zM5.904 5.197 10 9.293V6.525a.5.5 0 0 1 1 0V10.5a.5.5 0 0 1-.5.5H6.525a.5.5 0 0 1 0-1h2.768L5.197 5.904a.5.5 0 0 1 .707-.707"/>
</svg></th>
       <th scope="col"><i class="bi bi-room p-7"></i>Sala</th>
       <th scope="col"><i class="bi bi-person p-2"></i>Descrição</th>
       <th scope="col"><i class="bi bi-calendar p-2"></i>Reservado por</th>
       <th scope="col"><i class="bi bi-clock p-2"></i>Data e Hora</th>
       
       <table class="table">
 

  <tbody>

    <tr>
      <th scope="row">Sala A101</th>
      <td>Reunião de planejamento</td>
      <td>Alesandra Soares</td>
      <td>25/05/25, 20:00</td>
     
    </tr>
    <tr>
      <th scope="row">Sala A102</th>
      <td>Workshop de Marketing</td>
      <td>Pedro Filho</td>
      <td>24/05/25, 06:00</td>
      
    </tr>
    <tr>
      <th scope="row">Sala A103</th>
      <td>Treinamento de TI</td>
      <td>Maria Nisão</td>
      <td>23/05/25, 15:00</td>
    
    </tr>
  </tbody>
</table>

</table>
     </tr>
     </tr> 
   </thead>
   <tbody>
    

       </td>
     </tr>
   </tfoot>
 </table>
 
     <form method="POST" action="actions/salvar.php">
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="exampleModalLabel">Nova reserva</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
       <div class="mb-3 form-floating">
         <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="" required>
         <label for="exampleFormControlInput1">Sala</label>
       </div>
       <div class="mb-3 form-floating">
         <input name="descrição" type="text" class="form-control" id="exampleFormControlInput2" placeholder="" value="" required>
         <label for="exampleFormControlInput2">Descrição</label>
       </div>
       <div class="mb-3 form-floating">
         <input name="Nome" maxlength="14" type="text" class="form-control" id="exampleFormControlInput3" placeholder="" value="" required>
         <label for="exampleFormControlInput3">Nome</label>
       </div>
       <div class="mb-3 form-floating">
         <input name="Data e Horário" maxlength="14" type="date" class="form-control" id="exampleFormControlInput3" placeholder="" value="" required>
         <label for="exampleFormControlInput3">Data</label>
       </div>
       <div class="mb-3 form-floating">
         <input name="Data e Horário" maxlength="14" type="clock" class="form-control" id="exampleFormControlInput3" placeholder="" value="" required>
         <label for="exampleFormControlInput3">Hora</label>
       </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">  
           <i class="bi bi-x-circle-fill"></i>
           Fechar
         </button>
         <button type="submit" class="btn btn-primary">
           <i class="bi bi-person-badge"></i>
           Salvar reserva
         </button>

       </div>
     </div>
   </div>
 </div>
 </form>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
     <script>
       $(document).ready(function() {
         $('#exampleFormControlInput3').mask('(00)0000-0000');
         $('.modal').on('hidden.bs.modal', function() {
           $(this).find('input').val('');
         });
       });
     </script>
   </body>