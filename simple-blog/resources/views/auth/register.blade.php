<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="{{ route("register") }}" method="post">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationDefault01">Username</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="name" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" name="email" required>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault01">Username</label>
                <input type="password" class="form-control" id="validationDefault01" placeholder="First name" name="password" required>
            </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
            </label>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</body>
</html>