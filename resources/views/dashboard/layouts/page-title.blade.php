<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="{{ $icon ?? 'pe-7s-rocket' }} metismenu-icon  icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>{{ $judul ?? 'Dashboard' }}
                <div class="page-title-subheading">
                    <a href="{{ $link ?? ' ' }}">{{ $page1 ?? ' ' }}</a>
                    {{ $page2 ?? ' ' }}
                    {{ $page3 ?? ' ' }}
                </div>
            </div>
        </div>
        <div class=" page-title-actions d-flex">
            <a href="{{ route('dashboard') }}" type="button" data-toggle="tooltip" title="Kembali Ke Dashboard"
                data-placement="left" class="btn-shadow btn btn-dark pt-2">
                <i class="fas fa-home"></i>
            </a>
            <div class="input-group ml-3">
                <input type="text" class="form-control" id="#" placeholder="Search" aria-describedby="inputGroupPrepend"
                    required>
                <a href="#" class="input-group-prepend text-decoration-none ">
                    <span class="input-group-text rounded-right" id="inputGroupPrepend"><i
                            class="fas fa-search"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>
