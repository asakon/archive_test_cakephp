<h2 class="mb-3"><i class="fas fa-flag"></i> 質問</h2>
<section class="question">
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">
        <i class="fas fa-user-circle"></i> <?= 'たろう' // @TODO ユーザー管理機能実装時に修正する ?>
      </h5> 
      <p class="card-text"><?= nl2br(h($question->body)) ?></p>
      <p class="card-subtitle mb-2 text-muted">
        <small><?= h($question->created) ?></small>
        <small><i class="fas fa-comment-dots"></i> <?= $this->Number->format($answers->count()) ?></small> 
      </p>
    </div>
  </div>
</section>