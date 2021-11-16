<h1>hello projects

</h1>



<td>
    <form
      method="post" 
      action="{{url('/role')}}/8"> 

      @csrf
      @method('PATCH')

      <button 
        type="submit"
        onclick="return confirm('Are you sure?')"
        class="btn btn-sm btn-fill btn-primary">EDIT
      </button>
    </form>
  </td>

<td>
    <form
      method="post" 
      action="{{url('/role')}}/8"> 

      @csrf
      @method('DELETE')

      <button 
        type="submit"
        onclick="return confirm('Are you sure?')"
        class="btn btn-sm btn-fill btn-primary">Remove</button>
    </form>
  </td>

