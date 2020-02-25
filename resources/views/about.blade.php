@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>About Us</h1>
    <div class="container">
        <canvas id="bar-chart-grouped1" width="1500px" height="500px"></canvas>
        <canvas id="bar-chart-grouped2" width="1500px" height="500px"></canvas>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

        <script>
                new Chart(document.getElementById("bar-chart-grouped1"), {
            type: 'bar',
            data: {
            labels: ["Қорақалпоғистон Республикаси", "Андижон вилояти", "Бухоро вилояти", "Жиззах вилояти", "Қашқадарё вилояти", "Навоий вилояти", "Наманган вилояти", "Самарқанд вилояти", "Сирдарё вилояти", "Сурхондарё вилояти", "Тошкент вилояти", "Фарғона вилояти", "Хоразм вилояти", "Тошкент шаҳар"],
            datasets: [
                {
                    label: "Jamoat ishlari soni",
                    backgroundColor: "#3e95cd",
                    data: [
                        <?php foreach ($article as $item): ?>
                        '<?= "$item->id"?>',
                        <?php endforeach;?> 
                    ]
                }, {
                    label: "Ishchi kuchiga talab",
                    backgroundColor: "#8e5ea2",
                    data: [68978,34051,11101,77086, 71556, 2342, 53333, 94580, 29310, 15374, 44295, 110452, 60337, 7602 ]
                }, {
                    label: "Biriktirilgan fuqarolar soni",
                    backgroundColor: "#45f6ff",
                    data: [114,168,214,3173, 60, 0, 2319, 619, 12189, 0, 50, 7062, 0, 21]
                }, {
                    label: "Tabel yuritilgan fuqarolar soni",
                    backgroundColor: "#f8876f",
                    data: [48, 11, 37, 2380, 0, 0, 518, 117, 6990, 0, 1, 735, 0, 8]
                }
            ]
            },
            options: {
            title: {
            display: true,
            text: 'Population growth (millions)'
            }
            }
            });



                new Chart(document.getElementById("bar-chart-grouped2"), {
                    type: 'bar',
                    data: {
                        labels: ["Қорақалпоғистон Республикаси", "Андижон вилояти", "Бухоро вилояти", "Жиззах вилояти", "Қашқадарё вилояти", "Навоий вилояти", "Наманган вилояти", "Самарқанд вилояти", "Сирдарё вилояти", "Сурхондарё вилояти", "Тошкент вилояти", "Фарғона вилояти", "Хоразм вилояти", "Тошкент шаҳар"],
                        datasets: [
                           {
                                label: "Yo'naltirish so'ralgan mablag'",
                                backgroundColor: "#5fe768",
                                data: [44527670217, 20880205621, 6717685463, 50604144393, 43826377551, 1326653261,33497147175, 59242861868, 17832700520, 8677901550, 27323479071, 67613827128, 37810044298, 4003865664]
                            }, {
                                label: "Yo'naltirilgan mablag'",
                                backgroundColor: "#f4f5a2",
                                data: [	524969032, 2718520856, 935502634, 44424686444, 1383243997, 0, 14367143620, 40213013463, 14984730980, 0, 347756149, 45082224661, 7785839774, 110648095]
                            }
                        ]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'Population growth (millions)'
                        }
                    }
                });

        </script>
    </div>
</body>
</html>
@endsection
