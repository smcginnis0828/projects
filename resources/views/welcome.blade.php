<!DOCTYPE html>
<html>

    <head>
        <title>Accounting</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>

    <body>
      <div class="container">
        <table class="table table-bordered table-striped">

              <tr>
                <th>Cost</th>
                <th>Description</th>
                <th>Merchant</th>
                <th>Purchase Date</th>
              </tr>

              @foreach ($purchases as $purchase)
              <tr>
                <td class="cost-field">{{ $purchase->cost }}</td>
                <td>{{ $purchase->description }}</td>
                <td>{{ $purchase->merchant }}</td>
                <td>{{ $purchase->purchase_date }}</td>
              </tr>
              @endforeach

              <tr>
                <td id="total-field">Total:</td>
              </tr>

            <form method="POST" action="/">
              {{ csrf_field() }}
              <tr>
                <td><textarea id="text" name="cost" class="form-control">{{ old('body') }}</textarea></td>
                <td><textarea name="description" class="form-control">{{ old('body') }}</textarea></td>
                <td><textarea name="merchant" class="form-control">{{ old('body') }}</textarea></td>
                <td><textarea id="text1" name="purchase_date" class="form-control">{{ old('body') }}</textarea></td>
              </tr>

          </table>
          <button type="submit" class="btn btn-primary pull-right">Submit Entry</button>
        </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>
      <script src="/js/app.js"></script>
    </body>

</html>
