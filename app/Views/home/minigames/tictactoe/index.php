<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Belajar React</title>

  <!-- React Library -->
  <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>

  <!-- Don't use this in production: -->
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>

<body>
  <div id="root"></div>

  <script type="text/babel">
    function HomePage () {
        const [likes, setLikes] = React.useState(0);

        function HandleClick () {
            setLikes(likes + 1)
        }
    
        return (
            <>
            <button onClick={HandleClick}>Like ({likes})</button>
            </>
        );
    }
    const container = document.getElementById('root');
    const root = ReactDOM.createRoot(container);
    root.render(<HomePage />);
    </script>
</body>

</html>