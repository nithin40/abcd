<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Your form or input fields -->
<form id="dataForm">
    <input type="text" name="name" />
    <input type="text" name="email" />


    <!-- Add more input fields for other data as needed -->
    <button type="submit">Save Data</button>
</form>

<script>
    $(document).ready(function () {
        $('#dataForm').submit(function (e) {
            e.preventDefault();
            console.log("hello");
            var formData = $(this).serialize();
            console.log(formData);
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

            $.ajax({
                type: "POST",
                url: "/insertdata",
                data: formData,
                success: function (response) {
                    if (response.success) {
                        alert('Data saved successfully!');
                        // Handle success response if needed
                    } else {
                        alert('Error saving data.');
                        // Handle error response if needed
                    }
                },
                error: function (error) {
                    alert('Error saving data.');
                    // Handle error response if needed
                }
            });
        });
    });
</script>