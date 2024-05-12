<div>

  <style>
    .productlist a{
        text-decoration: none;
        cursor: pointer;
    }
    input{
     
      border: 0px solid;
      width: 50px;
    }

    .plus {

      border: 0px solid;
    }


    .select2-container .select2-selection--single{
      height:34px !important;
  }
  .select2-container--default .select2-selection--single{
           border: 1px solid #ccc !important; 
       border-radius: 0px !important; 
  }

  .table{

    margin-top: 40px;
    
  }
  </style>





  <div class="row">
    <form action="">
    <div class="container customersearch" style="width: 200px;margin-left:200px;">
      <div class="row">

      <div class="text-danger">
        @error('cus_id')
        <div class="error-label">
            {{ $message }}
        </div>
    @enderror
      </div>

        <select wire:model.live="cus_id">
          @foreach ($products as $item)
             <option value="{{$item->id}}">{{$item->productname}}</option>
          @endforeach
       </select>
       </div>
    </div>
  </div>


  
  <div class="input-group">
    <div id="search-autocomplete" class="form-outline" data-mdb-input-init>
      <input type="search" id="form1" class="form-control" />
      <label class="form-label" for="form1">Search</label>
    </div>
    <button type="button" class="btn btn-primary" data-mdb-ripple-init>
      <i class="fas fa-search"></i>
    </button>
  </div>




   <div class="row">

      <div class="col-4 mt-4">

        <div class="mt-3 ms-3">
          <form action="">
          <input class="form-control" type="search" wire:model.live="searchTerm" placeholder="Search">
          </form>
        </div>

        
        
           <div class="productlist">
        
         @forelse ($products as $product)
           <div class="mt-3 ms-3">
            <b>
              <a wire:click="save({{$product->id}})">{{ $product->productname }}</a>
             </b>
           </div>
        @empty
          
        @endforelse
           </div>
        
      </div>

      <div class="col-8">
        <table class="table table-striped">
         <thead class="bg-info">
          <tr>
          <th>SL</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Actions</th>
          </tr>
         </thead>
         <tbody>
       @forelse ($cartlist as $list)
         
          <tr>
            <td>{{ $list->id }}</td>
            <td>{{ $list->productname }}</td>
            <td>
              
              <div class="d-flex justify-center gap-1">
                  <div>
                    <input wire:model="productprice" type="text" class="small" value="{{$list->price}}">

                    </div>
   
                   <div>

                    <!-- Button trigger modal -->
                  
                     <button wire:click="updatePrice({{$list->id}})" type="button" class="btn btn-sm btn-primary">Edit</button>
                    </div>
    
              </div>
          </td>

            <td>
              <button type="button" wire:click="updateqtydecri({{$list->id}})"><i id="plus" class="fa-thin fa-plus" ></i></button>
              {{ $list->quantity }}
              <button type="button" wire:click="updateqty({{$list->id}})"><i id="plus" class="fa-thin fa-plus" ></i></button>
          

            </td>

            <td>
              <button class="btn btn-sm btn-danger" type="button" wire:click="deleteBTN({{$list->id}})">Delete</button>
            </td>
          </tr>
        
        @empty
         
       @endforelse
      </tbody>

    </table>

    <hr>
   

    @if ($count_cartlist > 0)
    <div class="row">
      <div class="col-1">
      </div>
      <div class="col-10 d-flex justify-between gap-3">
        <div>
         
        </div>
        <div>
        <b>   

          @if ($cus_redue_amount > 0)
          Due : {{ $cus_redue_amount }},
         @endif

         @if ($dueamount)
          Due Now : {{$dueamount}},
         @else
 
          @if ($amount == 0)
        

            Due Now :   {{ $amount }},
        
          @else
          Sub_Total :   {{ $amount }},
          @endif

         @endif

        </b>
          
        </div>

        <div>
          <input wire:model.live="decriamount" type="text" placeholder="enter amount" class="form-control small" style="width: 80px;">

        </div>

        @if ($total_due_amount)
        @if ($total_joma_amount)
        <b>Total Deposit : {{ $total_joma_amount }}</b>
        @else

        <b>  Total_Due : {{ $total_due_amount }}</b>
          
        @endif

        @else
        
       @endif

        <div>
          <button wire:click="order" type="button" class="btn btn-sm btn-primary"> Confirm</button>

        </div>
      
      </div>
    </div>
    @else
      
    @endif
   
      </div>

    </form>

   </div>



<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Price</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="">
        <input hidden wire:model="id" type="text" class="form-control">
        <label for="" class="form-label">Price</label>
        <input wire:model="price" type="text" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button wire:click="updatepricefromModel" type="button" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script>
  import { Autocomplete, Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Input, Ripple });

const basicAutocomplete = document.querySelector('#search-autocomplete');
const data = ['One', 'Two', 'Three', 'Four', 'Five'];
const dataFilter = (value) => {
  return data.filter((item) => {
    return item.toLowerCase().startsWith(value.toLowerCase());
  });
};

new Autocomplete(basicAutocomplete, {
  filter: dataFilter
});
</script>

</div>