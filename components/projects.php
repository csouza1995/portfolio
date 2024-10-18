<?php

require_once('tecnologies.php');

$projects = [
    [
        'id' => 1,
        'name' => 'ADEMPweb',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta eum dolore, molestiae officia aliquam quos nobis voluptatibus doloribus iste nisi nulla esse numquam quod, deleniti nesciunt. Debitis vero ad commodi.',
        'concluded' => false,
        'companies' => ['i-DataBI', 'Alban'],
        'year' => 2020,
        'technologies' => ['laravel', 'php', 'html', 'css', 'js', 'bootstrap', 'mysql'],
    ],
    [
        'id' => 2,
        'name' => 'i-Weldi',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta eum dolore, molestiae officia aliquam quos nobis voluptatibus doloribus iste nisi nulla esse numquam quod, deleniti nesciunt. Debitis vero ad commodi.',
        'concluded' => false,
        'companies' => ['i-DataBI'],
        'year' => 2021,
        'technologies' => ['laravel', 'php', 'html', 'css', 'js', 'bootstrap', 'vue', 'sqlite'],
    ],
    [
        'id' => 2,
        'name' => 'i-Stati',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta eum dolore, molestiae officia aliquam quos nobis voluptatibus doloribus iste nisi nulla esse numquam quod, deleniti nesciunt. Debitis vero ad commodi.',
        'concluded' => false,
        'companies' => ['i-DataBI'],
        'year' => 2021,
        'technologies' => ['laravel', 'php', 'html', 'css', 'js', 'bootstrap', 'postgresql'],
    ],
    [
        'id' => 2,
        'name' => 'i-Labi',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta eum dolore, molestiae officia aliquam quos nobis voluptatibus doloribus iste nisi nulla esse numquam quod, deleniti nesciunt. Debitis vero ad commodi.',
        'concluded' => false,
        'companies' => ['i-DataBI'],
        'year' => 2021,
        'technologies' => ['laravel', 'php', 'html', 'css', 'js', 'bootstrap', 'postgresql'],
    ],
];

foreach ($projects as $key => $project) {
    $image = realpath('./../public_html/assets/img/project-' . $project['id'] . '.png');

    if ($image) {
        $projects[$key]['image'] = 'data:image/png;base64,' . base64_encode(file_get_contents($image));
    } else {
        $projects[$key]['image'] = 'https://via.placeholder.com/150';
    }

    foreach ($project['technologies'] as $key2 => $technology) {
        $projects[$key]['technologies'][$key2] = $tecnologies[$technology];
    }
}

?>

<section class="space-y-3 py-6" id="projects">
    <h2 class="text-2xl font-bold">Meus Projetos</h2>

    <!-- project 1 -->
    <?php foreach ($projects as $project): ?>
        <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
            <!-- picture -->
            <div class="w-1/5 flex items-center justify-center">
                <div>
                    <img src="<?= $project['image']; ?>" alt="Foto do <?= $project['name']; ?>" class="rounded-md h-42">
                </div>
            </div>

            <!-- content -->
            <div class="w-4/5 space-y-3">
                <!-- project-title and tags -->
                <h3 class="font-semibold text-xl">
                    <div class="flex items-center justify-between">
                        <?= $project['name']; ?>

                        <p class="text-sm text-gray-400 italic mr-2">
                            <?= $project['concluded'] ? 'Finalizado em ' : 'Em andamento desde '; ?> <?= $project['year']; ?>
                        </p>
                    </div>

                    <!-- companies -->
                    <p class="text-sm text-gray-400 mt-0">
                        <?= implode(' | ', $project['companies']); ?>
                    </p>
                </h3>

                <!-- technologies -->
                <div class="flex gap-2">
                    <?php foreach ($project['technologies'] as $technology): ?>
                        <span class="px-2 py-1 rounded-md font-semibold text-sm <?= $technology['class']; ?>">
                            <i class='<?= $technology['icon']; ?>'></i>
                            <?= $technology['name']; ?>
                        </span>
                    <?php endforeach; ?>
                </div>

                <!-- project description -->
                <p class="leading-6 my-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error alias neque perspiciatis hic voluptates quis doloribus maxime nemo tempora repudiandae. Reiciendis, dolores. Excepturi corporis ab tempore, accusamus reiciendis autem provident.
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</section>