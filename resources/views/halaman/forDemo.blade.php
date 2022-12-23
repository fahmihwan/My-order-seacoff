<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="row">
        <div class="col-sm-12 mb-xl-0">
            <div class="d-flex bd-highlight ">
                <div class="me-auto p-2 bd-highlight">
                    <h5 class="text-dark font-weight-bold p-0 m-0">Daftar Akun Baru </h5>
                </div>

            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="card float-start" style="width:500px;">
            <div class="card-body">
                <h4 class="card-title">Buat Akun Baru</h4>
                <form action="/admin/setting/akun" class="forms-sample" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="menu">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            autocomplete="off" placeholder="Name" value="{{ old('nama') }}">
                        @error('nama')
                        <div id=" validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="menu">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                            autocomplete="off" placeholder="username" value="{{ old('username') }}">
                        @error('username')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="menu">Hak akses</label>
                        <select class="form-select @error('hak_akses') is-invalid @enderror" name="hak_akses">
                            <option selected> -- select --</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        @error('hak_akses')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="menu">Password</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror"
                            name="password" autocomplete="off" placeholder="password" value="{{ old('password') }}">
                        @error('password')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- <input type="password" name="password" class="form-control rounded-bottom" id="password"
                        placeholder="Password" required>
                    <label for=" password">Password</label> --}}

                    <button type="submit" class="btn btn-primary me-2">simpan </button>
                    <a href="/admin/item" class="btn btn-warning ">Kembali</a>
                </form>
            </div>
        </div>

    </div>

</body>

</html>