<div class="detail">
    <div class="detail__name"><?= $context['name'] ?></div>
    <div class="detail__description"><?= $context['description'] ?></div>

    <? if ($context['features'] && count($context['features']) > 0): ?>
    <div class="detail-features features">
        <? foreach ($context['features'] as $feature): ?>
        <div class="features-item">
            <div class="features-item__title"><?= $feature['title'] ?></div>
            <div class="features-item__description"><?= $feature['description'] ?></div>
        </div>
        <? endforeach; ?>
    </div>
    <? endif; ?>

    <div class="detail-seo"><?= $context['seo_text'] ?></div>
</div>