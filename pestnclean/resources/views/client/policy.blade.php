@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/policy.css') }}">
@endpush

@section('content')
    <section class="container-fluid p-0">
        <div class="blog-header-content">
            <h1>CHÍNH SÁCH</h1>
            <p>Khám phá ngay</p>
        </div>
    </section>

    <section class="container-fluid p-0 mt-5">
        <div class="tab-and-content-container">
            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="csbmtt-tab" data-bs-toggle="tab" data-bs-target="#csbmtt-tab-pane"
                        type="button" role="tab" aria-controls="csbmtt-tab-pane" aria-selected="true">
                        Chính Sách Bảo Mật Thông Tin
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="csbhdt-tab" data-bs-toggle="tab" data-bs-target="#csbhdt-tab-pane"
                        type="button" role="tab" aria-controls="csbhdt-tab-pane" aria-selected="false">
                        Chính Sách
                        Bảo Hành Đổi trả
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="csgnh-tab" data-bs-toggle="tab" data-bs-target="#csgnh-tab-pane"
                        type="button" role="tab" aria-controls="csgnh-tab-pane" aria-selected="false">
                        Chính sách giao
                        nhận hàng
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cstt-tab" data-bs-toggle="tab" data-bs-target="#cstt-tab-pane"
                        type="button" role="tab" aria-controls="cstt-tab-pane" aria-selected="false">
                        Chính sách
                        thanh toán
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="csbmtt-tab-pane" role="tabpanel" aria-labelledby="csbmtt-tab"
                    tabindex="0">
                    <!-- Tab Bảo Mật -->
                    <div class="csbmtt-tab-content-container">
                        <h1>Chính Sách Bảo Mật Thông Tin</h1>
                        <img class="csbmtt-tab-content-header-img"
                            src="../../../../FePestsClean/resources/images/policy/policy-tab-banner.png">
                        <div class="csbmtt-tab-policy-content">
                            <div class="csbmtt-text-container">
                                <p class="csbmtt-tab-policy-content-headline">
                                    CHÍNH SÁCH BẢO MẬT THÔNG TIN KHÁCH HÀNG:
                                </p>
                                <p class="csbmtt-tab-policy-content-support">
                                    Chào mừng bạn đến với Công Ty TNHH TM DV XNK NGUYỄN DUY (PestnClean)! Chúng tôi rất trân
                                    trọng sự tin tưởng của bạn và cam kết bảo vệ thông tin cá nhân của bạn. Chính sách bảo
                                    mật này mô tả cách chúng tôi thu thập, sử dụng và bảo vệ thông tin cá nhân của bạn khi
                                    bạn sử dụng trang web của chúng tôi và các quy định của pháp luật Việt Nam. Cụ thể:
                                </p>
                            </div>
                        </div>
                        <div class="csbmtt-tab-policy-detail-content">
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    1. Thông Tin Thu Thập
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Khi bạn tạo tài khoản hoặc mua hàng trên trang web của chúng tôi, chúng tôi có thể
                                        thu thập các thông tin cá nhân sau đây:
                                    <ul>
                                        <li>Tên của bạn</li>
                                        <li>Địa chỉ email</li>
                                        <li>Địa chỉ giao hàng</li>
                                        <li>Thông tin thanh toán</li>
                                    </ul>
                                    Chúng tôi cũng có thể tự động thu thập một số thông tin không cá nhân về việc bạn sử
                                    dụng trang web của chúng tôi, bao gồm địa chỉ IP, loại trình duyệt, thời gian truy cập
                                    và trang web bạn đã truy cập trước khi đến với chúng tôi.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    2. Sử Dụng Thông Tin
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Chúng tôi sử dụng thông tin mà bạn cung cấp để:
                                    <ul>
                                        <li>Cung cấp dịch vụ cho bạn và xử lý đơn hàng của bạn</li>
                                        <li>Gửi thông tin về sản phẩm, khuyến mãi và sự kiện</li>
                                        <li>Cải thiện và nâng cấp website của chúng tôi</li>
                                    </ul>
                                    Chúng tôi cam kết không bán, chia sẻ hoặc trao đổi thông tin cá nhân của bạn với bên thứ
                                    ba mà không có sự đồng ý của bạn, trừ khi cần thiết để cung cấp dịch vụ cho bạn hoặc
                                    tuân thủ theo yêu cầu pháp luật.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    3. Bảo Mật Thông Tin
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Chúng tôi cam kết bảo vệ thông tin cá nhân của bạn và đã triển khai các biện pháp an
                                        ninh phù hợp để bảo vệ thông tin đó khỏi lạm dụng, mất mát hoặc truy cập trái phép.
                                        Tuy nhiên, không có phương pháp truyền tải thông tin trên Internet hoặc lưu trữ điện
                                        tử nào là 100% an toàn.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    4. Quyền Lợi của Bạn
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Bạn có quyền truy cập, sửa đổi hoặc xóa bất kỳ thông tin cá nhân nào chúng tôi đã
                                        thu thập về bạn. Bạn cũng có quyền phản đối việc sử dụng thông tin của bạn cho mục
                                        đích tiếp thị hoặc liên hệ trực tiếp với chúng tôi để biết thêm thông tin.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    5. Liên Hệ Chúng Tôi
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Nếu bạn có bất kỳ câu hỏi hoặc ý kiến nào về Chính Sách Bảo Mật của chúng tôi, vui
                                        lòng liên hệ với chúng tôi
                                    </p>
                                    <ul>
                                        <li>Trụ sở chính: Lầu 8, 123 Lý Chính Thắng, P. Võ Thị Sáu, Quận 3, Tp. HCM, Viet
                                            Nam.</li>
                                        <li>Email: info@pestnclean.vn</li>
                                        <li>Hotline: 0868 36 36 00.</li>
                                        <li>Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của PestnClean!</li>
                                    </ul>
                                    <p class="csbmtt-detail-text-normal">
                                        Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của PestnClean!
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    6. Những người hoặc tổ chức có thể được tiếp cận với thông tin đó
                                </p>
                                <div class="text-and-ul-container">
                                    <ul>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Các đối tác là bên cung cấp dịch vụ cho chúng tôi liên quan đến thực hiện
                                                đơn hàng và chỉ giới hạn trong phạm vi thông tin cần thiết cũng như áp dụng
                                                các quy định đảm bảo an ninh, bảo mật các thông tin cá nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Chúng tôi sử dụng dịch vụ từ một nhà cung cấp dịch vụ là bên thứ ba để thực
                                                hiện một số hoạt động liên quan đến website amall.vn. Khi đó, bên thứ ba có
                                                thể truy cập hoặc xử lý các thông tin cá nhân trong quá trình cung cấp các
                                                dịch vụ đó. Chúng tôi yêu cầu các bên thứ ba này tuân thủ mọi luật lệ về bảo
                                                vệ thông tin cá nhân liên quan và các yêu cầu về an ninh liên quan đến thông
                                                tin cá nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Các chương trình có tính liên kết, đồng thực hiện, thuê ngoài cho các mục
                                                đích được nêu tại Mục 1 và luôn áp dụng các yêu cầu bảo mật thông tin cá
                                                nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Yêu cầu pháp lý: Chúng tôi có thể tiết lộ các thông tin cá nhân nếu điều đó
                                                do luật pháp yêu cầu và việc tiết lộ như vậy là cần thiết một cách hợp lý để
                                                tuân thủ các quy trình pháp lý.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Chuyển giao kinh doanh (nếu có): trong trường hợp sáp nhập, hợp nhất toàn bộ
                                                hoặc một phần với công ty khác, người mua sẽ có quyền truy cập thông tin
                                                được chúng tôi lưu trữ, duy trì trong đó bao gồm cả thông tin cá nhân.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="csbhdt-tab-pane" role="tabpanel" aria-labelledby="csbhdt-tab" tabindex="0">
                    <!-- Tab Bảo Hành -->
                    <div class="csbmtt-tab-content-container">
                        <h1>Chính Sách Bảo Hành - Đổi trả</h1>
                        <img class="csbmtt-tab-content-header-img"
                            src="../../../../FePestsClean/resources/images/policy/policy-tab-banner2.png">
                        <div class="csbmtt-tab-policy-content">
                            <div class="csbmtt-text-container">
                                <p class="csbmtt-tab-policy-content-headline">
                                    CHÍNH SÁCH BẢO MẬT THÔNG TIN KHÁCH HÀNG:
                                </p>
                                <p class="csbmtt-tab-policy-content-support">
                                    Chào mừng bạn đến với Công Ty TNHH TM DV XNK NGUYỄN DUY (PestnClean)! Chúng tôi rất trân
                                    trọng sự tin tưởng của bạn và cam kết bảo vệ thông tin cá nhân của bạn. Chính sách bảo
                                    mật này mô tả cách chúng tôi thu thập, sử dụng và bảo vệ thông tin cá nhân của bạn khi
                                    bạn sử dụng trang web của chúng tôi và các quy định của pháp luật Việt Nam. Cụ thể:
                                </p>
                            </div>
                        </div>
                        <div class="csbmtt-tab-policy-detail-content">
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    1. Thông Tin Thu Thập
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Khi bạn tạo tài khoản hoặc mua hàng trên trang web của chúng tôi, chúng tôi có thể
                                        thu thập các thông tin cá nhân sau đây:
                                    <ul>
                                        <li>Tên của bạn</li>
                                        <li>Địa chỉ email</li>
                                        <li>Địa chỉ giao hàng</li>
                                        <li>Thông tin thanh toán</li>
                                    </ul>
                                    Chúng tôi cũng có thể tự động thu thập một số thông tin không cá nhân về việc bạn sử
                                    dụng trang web của chúng tôi, bao gồm địa chỉ IP, loại trình duyệt, thời gian truy cập
                                    và trang web bạn đã truy cập trước khi đến với chúng tôi.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    2. Sử Dụng Thông Tin
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Chúng tôi sử dụng thông tin mà bạn cung cấp để:
                                    <ul>
                                        <li>Cung cấp dịch vụ cho bạn và xử lý đơn hàng của bạn</li>
                                        <li>Gửi thông tin về sản phẩm, khuyến mãi và sự kiện</li>
                                        <li>Cải thiện và nâng cấp website của chúng tôi</li>
                                    </ul>
                                    Chúng tôi cam kết không bán, chia sẻ hoặc trao đổi thông tin cá nhân của bạn với bên thứ
                                    ba mà không có sự đồng ý của bạn, trừ khi cần thiết để cung cấp dịch vụ cho bạn hoặc
                                    tuân thủ theo yêu cầu pháp luật.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    3. Bảo Mật Thông Tin
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Chúng tôi cam kết bảo vệ thông tin cá nhân của bạn và đã triển khai các biện pháp an
                                        ninh phù hợp để bảo vệ thông tin đó khỏi lạm dụng, mất mát hoặc truy cập trái phép.
                                        Tuy nhiên, không có phương pháp truyền tải thông tin trên Internet hoặc lưu trữ điện
                                        tử nào là 100% an toàn.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    4. Quyền Lợi của Bạn
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Bạn có quyền truy cập, sửa đổi hoặc xóa bất kỳ thông tin cá nhân nào chúng tôi đã
                                        thu thập về bạn. Bạn cũng có quyền phản đối việc sử dụng thông tin của bạn cho mục
                                        đích tiếp thị hoặc liên hệ trực tiếp với chúng tôi để biết thêm thông tin.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    5. Liên Hệ Chúng Tôi
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Nếu bạn có bất kỳ câu hỏi hoặc ý kiến nào về Chính Sách Bảo Mật của chúng tôi, vui
                                        lòng liên hệ với chúng tôi
                                    </p>
                                    <ul>
                                        <li>Trụ sở chính: Lầu 8, 123 Lý Chính Thắng, P. Võ Thị Sáu, Quận 3, Tp. HCM, Viet
                                            Nam.</li>
                                        <li>Email: info@pestnclean.vn</li>
                                        <li>Hotline: 0868 36 36 00.</li>
                                        <li>Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của PestnClean!</li>
                                    </ul>
                                    <p class="csbmtt-detail-text-normal">
                                        Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của PestnClean!
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    6. Những người hoặc tổ chức có thể được tiếp cận với thông tin đó
                                </p>
                                <div class="text-and-ul-container">
                                    <ul>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Các đối tác là bên cung cấp dịch vụ cho chúng tôi liên quan đến thực hiện
                                                đơn hàng và chỉ giới hạn trong phạm vi thông tin cần thiết cũng như áp dụng
                                                các quy định đảm bảo an ninh, bảo mật các thông tin cá nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Chúng tôi sử dụng dịch vụ từ một nhà cung cấp dịch vụ là bên thứ ba để thực
                                                hiện một số hoạt động liên quan đến website amall.vn. Khi đó, bên thứ ba có
                                                thể truy cập hoặc xử lý các thông tin cá nhân trong quá trình cung cấp các
                                                dịch vụ đó. Chúng tôi yêu cầu các bên thứ ba này tuân thủ mọi luật lệ về bảo
                                                vệ thông tin cá nhân liên quan và các yêu cầu về an ninh liên quan đến thông
                                                tin cá nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Các chương trình có tính liên kết, đồng thực hiện, thuê ngoài cho các mục
                                                đích được nêu tại Mục 1 và luôn áp dụng các yêu cầu bảo mật thông tin cá
                                                nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Yêu cầu pháp lý: Chúng tôi có thể tiết lộ các thông tin cá nhân nếu điều đó
                                                do luật pháp yêu cầu và việc tiết lộ như vậy là cần thiết một cách hợp lý để
                                                tuân thủ các quy trình pháp lý.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Chuyển giao kinh doanh (nếu có): trong trường hợp sáp nhập, hợp nhất toàn bộ
                                                hoặc một phần với công ty khác, người mua sẽ có quyền truy cập thông tin
                                                được chúng tôi lưu trữ, duy trì trong đó bao gồm cả thông tin cá nhân.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="csgnh-tab-pane" role="tabpanel" aria-labelledby="csgnh-tab"
                    tabindex="0">
                    <!-- Tab Giao Nhận Hàng -->
                    <div class="csbmtt-tab-content-container">
                        <h1>Chính sách giao nhận hàng</h1>
                        <img class="csbmtt-tab-content-header-img"
                            src="../../../../FePestsClean/resources/images/policy/policy-tab-banner3.png">
                        <div class="csbmtt-tab-policy-content">
                            <div class="csbmtt-text-container">
                                <p class="csbmtt-tab-policy-content-headline">
                                    CHÍNH SÁCH BẢO MẬT THÔNG TIN KHÁCH HÀNG:
                                </p>
                                <p class="csbmtt-tab-policy-content-support">
                                    Chào mừng bạn đến với Công Ty TNHH TM DV XNK NGUYỄN DUY (PestnClean)! Chúng tôi rất trân
                                    trọng sự tin tưởng của bạn và cam kết bảo vệ thông tin cá nhân của bạn. Chính sách bảo
                                    mật này mô tả cách chúng tôi thu thập, sử dụng và bảo vệ thông tin cá nhân của bạn khi
                                    bạn sử dụng trang web của chúng tôi và các quy định của pháp luật Việt Nam. Cụ thể:
                                </p>
                            </div>
                        </div>
                        <div class="csbmtt-tab-policy-detail-content">
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    1. Thông Tin Thu Thập
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Khi bạn tạo tài khoản hoặc mua hàng trên trang web của chúng tôi, chúng tôi có thể
                                        thu thập các thông tin cá nhân sau đây:
                                    <ul>
                                        <li>Tên của bạn</li>
                                        <li>Địa chỉ email</li>
                                        <li>Địa chỉ giao hàng</li>
                                        <li>Thông tin thanh toán</li>
                                    </ul>
                                    Chúng tôi cũng có thể tự động thu thập một số thông tin không cá nhân về việc bạn sử
                                    dụng trang web của chúng tôi, bao gồm địa chỉ IP, loại trình duyệt, thời gian truy cập
                                    và trang web bạn đã truy cập trước khi đến với chúng tôi.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    2. Sử Dụng Thông Tin
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Chúng tôi sử dụng thông tin mà bạn cung cấp để:
                                    <ul>
                                        <li>Cung cấp dịch vụ cho bạn và xử lý đơn hàng của bạn</li>
                                        <li>Gửi thông tin về sản phẩm, khuyến mãi và sự kiện</li>
                                        <li>Cải thiện và nâng cấp website của chúng tôi</li>
                                    </ul>
                                    Chúng tôi cam kết không bán, chia sẻ hoặc trao đổi thông tin cá nhân của bạn với bên thứ
                                    ba mà không có sự đồng ý của bạn, trừ khi cần thiết để cung cấp dịch vụ cho bạn hoặc
                                    tuân thủ theo yêu cầu pháp luật.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    3. Bảo Mật Thông Tin
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Chúng tôi cam kết bảo vệ thông tin cá nhân của bạn và đã triển khai các biện pháp an
                                        ninh phù hợp để bảo vệ thông tin đó khỏi lạm dụng, mất mát hoặc truy cập trái phép.
                                        Tuy nhiên, không có phương pháp truyền tải thông tin trên Internet hoặc lưu trữ điện
                                        tử nào là 100% an toàn.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    4. Quyền Lợi của Bạn
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Bạn có quyền truy cập, sửa đổi hoặc xóa bất kỳ thông tin cá nhân nào chúng tôi đã
                                        thu thập về bạn. Bạn cũng có quyền phản đối việc sử dụng thông tin của bạn cho mục
                                        đích tiếp thị hoặc liên hệ trực tiếp với chúng tôi để biết thêm thông tin.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    5. Liên Hệ Chúng Tôi
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Nếu bạn có bất kỳ câu hỏi hoặc ý kiến nào về Chính Sách Bảo Mật của chúng tôi, vui
                                        lòng liên hệ với chúng tôi
                                    </p>
                                    <ul>
                                        <li>Trụ sở chính: Lầu 8, 123 Lý Chính Thắng, P. Võ Thị Sáu, Quận 3, Tp. HCM, Viet
                                            Nam.</li>
                                        <li>Email: info@pestnclean.vn</li>
                                        <li>Hotline: 0868 36 36 00.</li>
                                        <li>Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của PestnClean!</li>
                                    </ul>
                                    <p class="csbmtt-detail-text-normal">
                                        Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của PestnClean!
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    6. Những người hoặc tổ chức có thể được tiếp cận với thông tin đó
                                </p>
                                <div class="text-and-ul-container">
                                    <ul>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Các đối tác là bên cung cấp dịch vụ cho chúng tôi liên quan đến thực hiện
                                                đơn hàng và chỉ giới hạn trong phạm vi thông tin cần thiết cũng như áp dụng
                                                các quy định đảm bảo an ninh, bảo mật các thông tin cá nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Chúng tôi sử dụng dịch vụ từ một nhà cung cấp dịch vụ là bên thứ ba để thực
                                                hiện một số hoạt động liên quan đến website amall.vn. Khi đó, bên thứ ba có
                                                thể truy cập hoặc xử lý các thông tin cá nhân trong quá trình cung cấp các
                                                dịch vụ đó. Chúng tôi yêu cầu các bên thứ ba này tuân thủ mọi luật lệ về bảo
                                                vệ thông tin cá nhân liên quan và các yêu cầu về an ninh liên quan đến thông
                                                tin cá nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Các chương trình có tính liên kết, đồng thực hiện, thuê ngoài cho các mục
                                                đích được nêu tại Mục 1 và luôn áp dụng các yêu cầu bảo mật thông tin cá
                                                nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Yêu cầu pháp lý: Chúng tôi có thể tiết lộ các thông tin cá nhân nếu điều đó
                                                do luật pháp yêu cầu và việc tiết lộ như vậy là cần thiết một cách hợp lý để
                                                tuân thủ các quy trình pháp lý.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Chuyển giao kinh doanh (nếu có): trong trường hợp sáp nhập, hợp nhất toàn bộ
                                                hoặc một phần với công ty khác, người mua sẽ có quyền truy cập thông tin
                                                được chúng tôi lưu trữ, duy trì trong đó bao gồm cả thông tin cá nhân.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cstt-tab-pane" role="tabpanel" aria-labelledby="cstt-tab"
                    tabindex="0">
                    <!-- Tab Thanh Toán -->
                    <div class="csbmtt-tab-content-container">
                        <h1>Chính sách thanh toán</h1>
                        <img class="csbmtt-tab-content-header-img"
                            src="../../../../FePestsClean/resources/images/policy/policy-tab-banner4.png">
                        <div class="csbmtt-tab-policy-content">
                            <div class="csbmtt-text-container">
                                <p class="csbmtt-tab-policy-content-headline">
                                    CHÍNH SÁCH BẢO MẬT THÔNG TIN KHÁCH HÀNG:
                                </p>
                                <p class="csbmtt-tab-policy-content-support">
                                    Chào mừng bạn đến với Công Ty TNHH TM DV XNK NGUYỄN DUY (PestnClean)! Chúng tôi rất trân
                                    trọng sự tin tưởng của bạn và cam kết bảo vệ thông tin cá nhân của bạn. Chính sách bảo
                                    mật này mô tả cách chúng tôi thu thập, sử dụng và bảo vệ thông tin cá nhân của bạn khi
                                    bạn sử dụng trang web của chúng tôi và các quy định của pháp luật Việt Nam. Cụ thể:
                                </p>
                            </div>
                        </div>
                        <div class="csbmtt-tab-policy-detail-content">
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    1. Thông Tin Thu Thập
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Khi bạn tạo tài khoản hoặc mua hàng trên trang web của chúng tôi, chúng tôi có thể
                                        thu thập các thông tin cá nhân sau đây:
                                    <ul>
                                        <li>Tên của bạn</li>
                                        <li>Địa chỉ email</li>
                                        <li>Địa chỉ giao hàng</li>
                                        <li>Thông tin thanh toán</li>
                                    </ul>
                                    Chúng tôi cũng có thể tự động thu thập một số thông tin không cá nhân về việc bạn sử
                                    dụng trang web của chúng tôi, bao gồm địa chỉ IP, loại trình duyệt, thời gian truy cập
                                    và trang web bạn đã truy cập trước khi đến với chúng tôi.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    2. Sử Dụng Thông Tin
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Chúng tôi sử dụng thông tin mà bạn cung cấp để:
                                    <ul>
                                        <li>Cung cấp dịch vụ cho bạn và xử lý đơn hàng của bạn</li>
                                        <li>Gửi thông tin về sản phẩm, khuyến mãi và sự kiện</li>
                                        <li>Cải thiện và nâng cấp website của chúng tôi</li>
                                    </ul>
                                    Chúng tôi cam kết không bán, chia sẻ hoặc trao đổi thông tin cá nhân của bạn với bên thứ
                                    ba mà không có sự đồng ý của bạn, trừ khi cần thiết để cung cấp dịch vụ cho bạn hoặc
                                    tuân thủ theo yêu cầu pháp luật.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    3. Bảo Mật Thông Tin
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Chúng tôi cam kết bảo vệ thông tin cá nhân của bạn và đã triển khai các biện pháp an
                                        ninh phù hợp để bảo vệ thông tin đó khỏi lạm dụng, mất mát hoặc truy cập trái phép.
                                        Tuy nhiên, không có phương pháp truyền tải thông tin trên Internet hoặc lưu trữ điện
                                        tử nào là 100% an toàn.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    4. Quyền Lợi của Bạn
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Bạn có quyền truy cập, sửa đổi hoặc xóa bất kỳ thông tin cá nhân nào chúng tôi đã
                                        thu thập về bạn. Bạn cũng có quyền phản đối việc sử dụng thông tin của bạn cho mục
                                        đích tiếp thị hoặc liên hệ trực tiếp với chúng tôi để biết thêm thông tin.
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    5. Liên Hệ Chúng Tôi
                                </p>
                                <div class="text-and-ul-container">
                                    <p class="csbmtt-detail-text-normal">
                                        Nếu bạn có bất kỳ câu hỏi hoặc ý kiến nào về Chính Sách Bảo Mật của chúng tôi, vui
                                        lòng liên hệ với chúng tôi
                                    </p>
                                    <ul>
                                        <li>Trụ sở chính: Lầu 8, 123 Lý Chính Thắng, P. Võ Thị Sáu, Quận 3, Tp. HCM, Viet
                                            Nam.</li>
                                        <li>Email: info@pestnclean.vn</li>
                                        <li>Hotline: 0868 36 36 00.</li>
                                        <li>Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của PestnClean!</li>
                                    </ul>
                                    <p class="csbmtt-detail-text-normal">
                                        Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của PestnClean!
                                    </p>
                                </div>
                            </div>
                            <div class="csbmtt-detail-text-container">
                                <p class="csbmtt-detail-text-title">
                                    6. Những người hoặc tổ chức có thể được tiếp cận với thông tin đó
                                </p>
                                <div class="text-and-ul-container">
                                    <ul>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Các đối tác là bên cung cấp dịch vụ cho chúng tôi liên quan đến thực hiện
                                                đơn hàng và chỉ giới hạn trong phạm vi thông tin cần thiết cũng như áp dụng
                                                các quy định đảm bảo an ninh, bảo mật các thông tin cá nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Chúng tôi sử dụng dịch vụ từ một nhà cung cấp dịch vụ là bên thứ ba để thực
                                                hiện một số hoạt động liên quan đến website amall.vn. Khi đó, bên thứ ba có
                                                thể truy cập hoặc xử lý các thông tin cá nhân trong quá trình cung cấp các
                                                dịch vụ đó. Chúng tôi yêu cầu các bên thứ ba này tuân thủ mọi luật lệ về bảo
                                                vệ thông tin cá nhân liên quan và các yêu cầu về an ninh liên quan đến thông
                                                tin cá nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Các chương trình có tính liên kết, đồng thực hiện, thuê ngoài cho các mục
                                                đích được nêu tại Mục 1 và luôn áp dụng các yêu cầu bảo mật thông tin cá
                                                nhân.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Yêu cầu pháp lý: Chúng tôi có thể tiết lộ các thông tin cá nhân nếu điều đó
                                                do luật pháp yêu cầu và việc tiết lộ như vậy là cần thiết một cách hợp lý để
                                                tuân thủ các quy trình pháp lý.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="csbmtt-detail-text-normal">
                                                Chuyển giao kinh doanh (nếu có): trong trường hợp sáp nhập, hợp nhất toàn bộ
                                                hoặc một phần với công ty khác, người mua sẽ có quyền truy cập thông tin
                                                được chúng tôi lưu trữ, duy trì trong đó bao gồm cả thông tin cá nhân.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
