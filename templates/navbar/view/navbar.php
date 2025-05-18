<?php
use templates\navbar\model\navbarmodel;
/** @var array $data */
?>

<nav class="navbar navbar-expand-md bg-body py-3" style="background: var(--bs-info);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <!-- Logo SVG hier indien gewenst -->
            <span>T.I.M.O.</span>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto">
                <?php foreach ($data as $item): ?>
                    <?php if ($item['type'] === 'link'): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= htmlspecialchars(navbarmodel::buildUrl($item['route'])) ?>">
                                <?= htmlspecialchars($item['label']) ?>
                            </a>
                        </li>
                    <?php elseif ($item['type'] === 'dropdown'): ?>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                <?= htmlspecialchars($item['label']) ?>
                            </a>
                            <div class="dropdown-menu">
                                <?php foreach ($item['items'] as $subitem): ?>
                                    <a class="dropdown-item" href="<?= htmlspecialchars(navbarmodel::buildUrl($subitem['route'])) ?>">
                                        <?= htmlspecialchars($subitem['label']) ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <a class="btn btn-primary ms-md-2" role="button" href="/auth/login">Login</a>
        </div>
    </div>
</nav>
