<?php
include 'partials/header.php';
include 'scripts/scores.php';
?>
<!-- content will go here -->
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Name</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Score</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Grade</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $student) : ?>
                        <tr class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?= $student['name'] ?></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?= $student['score'] ?></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">Grade</td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include 'partials/footer.php';
?>