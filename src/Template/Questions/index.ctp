<h2 class="mb-3"><i class="fas fa-list"></i> 質問一覧</h2>

<?php if($questions->isEmpty()): ?>
  <div class="card mb-2">
    <div class="card-body">
      <h5 class="card-title text-center">表示できる質問がありません</h5>
    </div>
 </div>
<?php else: ?>
  <p><?= $this->Paginator->counter([ 'format' => '全{{pages}}ページ中{{page}}目を表示しています']) ?></p>
<?php endif; ?>