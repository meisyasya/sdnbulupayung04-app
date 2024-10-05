@foreach ($users as $item)
    <!-- Modal -->
    <div class="modal fade" id="modalUpdate{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h1 class="modal-title fs-5" id="modalLabel{{ $item->id }}">Update User</h1> <!-- ID label sesuai dengan modal -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('admin.UsersUpdate', $item->id) }}" method="post"> <!-- Perbaikan route -->
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name{{ $item->id }}">Nama</label>
                            <input type="text" name="name" id="name{{ $item->id }}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $item->name) }}"> <!-- Sesuaikan ID input -->
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email{{ $item->id }}">Email</label>
                            <input type="email" name="email" id="email{{ $item->id }}" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $item->email) }}"> <!-- Sesuaikan ID input -->
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                 
                        <div class="mb-3">
                            <label for="password{{ $item->id }}">Password <small>(Kosongkan jika tidak diubah)</small></label>
                            <input type="password" name="password" id="password{{ $item->id }}" class="form-control @error('password') is-invalid @enderror" value=""> <!-- Pastikan value kosong -->
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password{{ $item->id }}"> Konfirmasi Password </label>
                            <input type="password" name="password_confirmation" id="password{{ $item->id }}" class="form-control @error('password') is-invalid @enderror" value=""> <!-- Pastikan value kosong -->
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endforeach
