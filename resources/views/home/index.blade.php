<html>
    <head>
        <meta charset="utf-8">
        <title>Todo/Index</title>
        <link rel="stylesheet" href="{{asset('/css/style.css')}}" >
    </head>
    <body>
        <header>
            Todo App
        </header>
        <main>
            <p>今日は何する？</p>
            <form action="post" method="/home">
                <input type="text" name="todo">
                <input type="submit" value="送信">
            </form>
            
        </main>
        <footer>
            Copyright: Takami 2022.
        </footer>
    </body>
</html>