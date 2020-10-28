<tr>
                        <td class="pt-3-half"></td>
                        <td class="pt-3-half">
                            <form method="post" action="/categories" name="add-form" >
                                @csrf
                                <div class="form-group">
                                <input type="text" class="form-control form-control-sm" maxlength="50" name="title" id="title" value="" placeholder="Title" class="" required />
                                
                                </div>
                            </form>
                        </td>
                        <td class="text-center" colspan="2">
                                <a href="/categories" class="text-success" onclick="event.preventDefault();
                                        document.getElementById('add-form').submit();">
                                    <i data-feather="plus" aria-hidden="true"></i>
                                </a>
                        </td>
                    </tr>