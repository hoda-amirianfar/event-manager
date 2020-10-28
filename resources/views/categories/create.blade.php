<tr>
<form method="post" action="/categories" name="add-form" >
                        <td class="pt-3-half"></td>
                        <td class="pt-3-half">
                                @csrf
                                <input type="text" class="form-control form-control-sm" maxlength="50" name="title" id="title" value="" placeholder="Title" class="" required />
                        </td>
                        <td class="text-center" colspan="2">
                            <button type="submit" class="btn btn-success btn-rounded btn-sm my-0">Add</button> 
                        </td>
                                                           
                        </form>
                    </tr>