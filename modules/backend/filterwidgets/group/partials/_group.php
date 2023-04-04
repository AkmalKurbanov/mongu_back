<a
    href="javascript:;"
    class="filter-scope <?= $scope->scopeValue ? 'active' : '' ?>"
    data-scope-name="<?= $scope->scopeName ?>"
>
    <span class="filter-label"><?= e(__($scope->label)) ?></span>
    <?php if ($scope->scopeValue): ?>
        <span class="filter-setting"><?= count((array) $scope->value) ?></span>
    <?php endif ?>
</a>
