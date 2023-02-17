<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="">
    <input type="submit" value="Upload">
</form>
