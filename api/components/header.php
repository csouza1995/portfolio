<?php
$headerLinks = [
    ['href' => '#projects', 'text' => 'Projetos', 'target' => '_self'],
    ['href' => 'https://github.com/csouza1995', 'text' => 'Github', 'target' => '_blank'],
    ['href' => 'https://www.linkedin.com/in/mr-carlos-souza/', 'text' => 'Linkedin', 'target' => '_blank'],
];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <!-- logo -->
    <div class="font-bold text-xl text-cyan-600">
        🚀 Meu Portfolio...
    </div>

    <div>
        <ul class="flex gap-x-3 font-medium">
            <?php foreach ($headerLinks as $link): ?>
                <li class="hover:underline">
                    <a href="<?= $link['href']; ?>" target="<?= $link['target']; ?>">
                        <?= $link['text']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>