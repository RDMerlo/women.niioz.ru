<!-- Модальное окно myModal -->
<div class="modal fade" id="myModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
        <h4 class="modal-title">Заголовок модального окна</h4>
      </div>
      <div class="modal-body">
        <p id="content"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
 
<script>
// при открытии модального окна
$('#myModal').on('show.bs.modal', function (event) {
  // получить кнопку, которая его открыло
  var button = $(event.relatedTarget) 
  // извлечь информацию из атрибута data-content
  var content = button.data('content') 
  // вывести эту информацию в элемент, имеющий id="content"
  $(this).find('#content').text(content); 
})
</script>