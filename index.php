<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <button>Change order</button>

    <div id="box">
        <?php include 'views/list-view.php'; ?>
    </div>

    <script>
    let _currentOrder = '';
        $(document).ready(function(){
            $('button').click(function(){

                switch(_currentOrder)
                {
                    case '':
                        _currentOrder = 'ASC';
                    break;
                    case 'ASC':
                        _currentOrder = 'DESC';
                    break;
                    case 'DESC':
                        _currentOrder = 'ASC';
                    break;
                    default:
                    console.log('smth going wrong');
                    break;
                }

                $('#box').load('data/temp.php',{
                    order: _currentOrder,
                    by: 'name'
                });

            });
        });
    </script>
</body>
</html>