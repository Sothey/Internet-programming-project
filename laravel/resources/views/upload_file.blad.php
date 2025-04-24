<html>

<body>
    <h3>Upload File</h3>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="document" />
        <button type="submit">Upload</button>
    </form>
</body>

</html>