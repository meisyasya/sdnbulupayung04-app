<!-- Modal -->
<div class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h1 class="modal-title fs-5" id="modalLabel">Create User</h1> 
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="{{ route('admin.UsersStore') }}" method="post">

                @csrf
                <div class="mb-3">
                    <label for="name">Nama</label>
                    {{-- kalo eror warna merah --}}
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}

                        </div>
                        
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="email">Email</label>
                    {{-- kalo eror warna merah --}}
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}

                        </div>
                        
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="password">Password</label>
                    {{-- kalo eror warna merah --}}
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}

                        </div>
                        
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="password">Konfirmasi Password</label>
                    {{-- kalo eror warna merah --}}
                    <input type="password" name="password_confirmation" id="konfirmasi_password" class="form-control @error('konfirmasi_password') is-invalid @enderror" value="{{ old('konfirmasi_password') }}">
                    @error('konfirmasi_password')
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
