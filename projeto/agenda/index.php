<?php
  include_once("templates/header.php")
?>
<div class="container">



<?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>


    <h1 id="main-title">Minha Agenda</h1>
    <?php if(count($contacts) > 0): ?>
      
      <table class="table" id="contacts-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col"></th>
          </tr>
        </thead>

        <Tbody>
          <?php foreach($contacts as $contact): ?>
            <tr>
            <td scope="row" class="col-id"><?= $contact["id"] ?></td>
            <td scope="row" class="col-id"><?= $contact["name"] ?></td>
            <td scope="row" class="col-id"><?= $contact["phone"] ?></td>
            <td class="actions">
                <a href="<?php $BASE_URL ?>show.php?id=<?= $contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?php $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?php $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                  <button type="submit"><i class="fas fa-times delete-icon"></i></button>
              </form>
                
            </td>
            </tr>
          <?php endforeach; ?>
        </Tbody>
      </table>

    <?php else: ?>
      <p id="empty-list-text">AINDA NAO HÁ CONTATOS 
      <a href="<?php $BASE_URL ?>create.php">CLIQUE AQUI PARA CRIAR UM NOVO CONTATO</a> </p>
    <?php endif; ?>

</div>




<?php
  include_once("templates/footer.php")
?>
  
