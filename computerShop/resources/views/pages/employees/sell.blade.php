@extends('Layouts.app')

@section('orderDetails')


<h3 style="text-align:center">Pending list</h3><hr><hr>


<table class="table table-bordered">
    <tr>
        <th>Customer Id</th>
        <th>Order Id</th>
        <th>Product Name</th>
        <th>Product Image</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Order Status</th>
    </tr>
    @foreach($orders as $order)
    <tr>
        <td>{{$order->customerId}}</td>
        <td>{{$order->id}}</td>

        @foreach($order->orderDetail as $od)

        <td>{{$od->product->pName}}</td>
        <td><img width="100px" height="100px" src="storage/uploads/{{$od->product->pPicture}}"></td>
        <td>{{$od->product->pPrice}}</td>
        <td>{{$od->orderQuantity}}</td>
        <td>{{$od->totalPrice}}</td>
        <td>{{$order->status}}</td>
        <td><a href="/ordered/{{$order->id}}"><button type="button" class="btn btn-success">Sell</button></a></td>
        
    </tr>
    @endforeach
    @endforeach

</table>




@endsection