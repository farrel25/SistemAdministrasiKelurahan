{{-- @if ($products) --}}
<div class="modal fade modal-detail-product" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nama Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('/images') }}/img-umkm-1.png" alt="" class="img-fluid mb-4">
                            <h5>Rp. 15.000</h5>
                            <ul class="list-unstyled list-inline my-2">
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i>
                                </li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i>
                                </li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i>
                                </li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i>
                                </li>
                                <li class="list-inline-item mx-0"><i class="fas fa-star mimosa-text"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <h5>Deskripsi</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non nisl turpis. Maecenas
                                auctor vel nulla ac cursus. Sed congue condimentum dolor nec semper. Vivamus imperdiet
                                consequat lacus in rutrum. Suspendisse et augue id ligula rutrum imperdiet. Pellentesque
                                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris
                                ac magna rutrum, tincidunt libero et, gravida orci. </p>

                            <h5>Penjual</h5>
                            <p>Nama Penjual</p>
                            <h5>Alamat</h5>
                            <p>Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah
                                50131</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fas fa-envelope mr-2"></i>bambang@gmail.com</button>
                <button type="button" class="btn btn-success"><i class="fab fa-whatsapp mr-2"></i>0856891234</button>
            </div>
        </div>
    </div>
</div>
{{-- @endif --}}

<div class="modal fade modal-requirements" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Persyaratakn dan Ketentuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum, dolor a luctus
                        sollicitudin, elit ex rhoncus ante, ac semper nibh elit a elit. Morbi sit amet bibendum velit.
                        In semper pellentesque nisl, vel vehicula eros eleifend sed. Praesent eget dignissim enim.
                        Vivamus efficitur facilisis neque sed varius. Sed sagittis, lacus a consectetur auctor, diam
                        eros elementum massa, vitae malesuada enim nulla vel purus. Nullam id dolor elementum,
                        consectetur metus non, vulputate odio.

                        Aliquam ante eros, consectetur vitae accumsan efficitur, egestas non purus. In hac habitasse
                        platea dictumst. Praesent quis ipsum tellus. Phasellus at mi est. Cras consequat ullamcorper
                        semper. Praesent ac congue augue. Morbi id euismod massa. Etiam non nibh quam. Donec feugiat a
                        metus ac porttitor. In vitae mi urna.</p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fas fa-envelope mr-2"></i>bambang@gmail.com</button>
                <button type="button" class="btn btn-success"><i class="fab fa-whatsapp mr-2"></i>0856891234</button>
            </div>
        </div>
    </div>
</div>