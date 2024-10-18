<?php
$heroLinks = [
    ['href' => 'https://www.facebook.com/csouza95', 'icon' => 'bx bxl-facebook-square'],
    ['href' => 'https://www.instagram.com/carlonzon', 'icon' => 'bx bxl-instagram-alt'],
];

$profilePath = realpath('../assets/img/me.png');

if ($profilePath) {
    $profileImg = 'data:image/png;base64,' . base64_encode(file_get_contents($profilePath));
} else {
    $profileImg = 'https://via.placeholder.com/150';
}

?>

<section class="flex gap-x-3">
    <!-- title and description -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Olá, meu nome é Carlos Souza...</h1>

        <p class="text-xl leading-9 mt-6">
            Sou desenvolvedor web e apaixonado por tecnologia.
            Atualmente estou estudando e me aprimorando em desenvolvimento web.
        </p>

        <ul class="flex gap-x-3 mt-3 text-3xl">
            <?php foreach ($heroLinks as $link): ?>
                <li class="hover:animate-bounce">
                    <a href="<?= $link['href']; ?>" target="_blank">
                        <i class='<?= $link['icon']; ?>'></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- picture -->
    <div class="w-1/3 flex items-center justify-center ">
        <div>
            <img src="<?= $profileImg; ?>" alt="Carlos Souza" class="rounded-full h-60">
        </div>
    </div>
</section>
