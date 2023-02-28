<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/jackpotHistory.css">
<script type="text/javascript" src="/js/jackpotHistory.js"></script>
<div class="section">
    <div class="history-component">
        <div class="history-head">
            <h1 class="history-caption">История игр</h1>
            <div class="history-link"><a class="btn btn-light" href="/">Вернуться</a></div>
        </div>
		<div class="button-group__wrap">
			<div class="button-group__content rooms">
				<?php $__currentLoopData = $rooms->sortBy('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<a class="btn <?php echo e($r->name); ?>" data-room="<?php echo e($r->name); ?>"><span><?php echo e($r->title); ?></span></a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
        <div class="game-stats">
			<div class="table-heading">
				<div class="thead">
					<div class="tr">
						<div class="th">#</div>
						<div class="th">Победитель</div>
						<div class="th">Выигрыш</div>
						<div class="th">Процент</div>
						<div class="th">Билет</div>
						<div class="th"></div>
					</div>
				</div>
			</div>
			<div class="table-stats-wrap" style="min-height: 530px; max-height: 100%;">
				<div class="table-wrap" style="transform: translateY(0px);">
					<table class="table">
						<tbody id="history"></tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/jackpotHistory.blade.php ENDPATH**/ ?>