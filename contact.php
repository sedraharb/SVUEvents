<?php
$pageTitle = "اتصل بنا";
include 'includes/header.php';

/*
include 'db.php';

    // حفظ الرسالة في قاعدة البيانات
    // أو إرسال بريد إلكتروني
    اذا نجحت منعطي رسالة تبع ارسال الرسالة بنجاح

*/

?>
<!-- عنوان الصفحة -->
<section class="bg-primary text-white py-4">
    <div class="container text-end">

        <h1 class="h3 mb-1">
            اتصل بنا
            <i class="bi bi-envelope ms-2"></i>
        </h1>

        <p class="mb-0 opacity-75">
            هل لديك استفسار او تريد اضافة فعالية؟ نحن هنا لمساعدتك.
        </p>

    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-7">
                <div class="card contact-card p-4 text-end">
                    <h4 class="fw-bold mb-4">
                        إرسال رسالة
                        <i class="bi bi-send ms-2 text-primary"></i>
                    </h4>
                 
                    <div id="formAlert"
                         class="alert"
                         style="display:none;"
                         role="alert">
                    </div>
                    <!-- 
                    تحويل هذا القسم إلى form عند ربط الباك اند
                    -->
                    <div>
                        <div class="mb-3">
                            <label for="contactName"
                                   class="form-label fw-semibold">
                                الاسم الكامل
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text"
                                   id="contactName"
                                   name="name"
                                   class="form-control text-end"
                                   placeholder="أدخل اسمك الكامل">

                            <div class="invalid-feedback">
                                الاسم مطلوب
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="contactEmail"
                                   class="form-label fw-semibold">

                                البريد الإلكتروني
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email"
                                   id="contactEmail"
                                   name="email"
                                   class="form-control text-end"
                                   placeholder="example@email.com">

                            <div class="invalid-feedback">
                                أدخل بريداً إلكترونياً صحيحاً
                            </div>

                        </div>
                        <div class="mb-3">

                            <label for="contactSubject"
                                   class="form-label fw-semibold">
                                الموضوع
                            </label>
                            <select id="contactSubject"
                                    name="subject"
                                    class="form-select text-end">

                                <option value="">
                                    اختر الموضوع
                                </option>

                                <option value="general">
                                    استفسار عام
                                </option>

                                <option value="event">
                                    إضافة فعالية
                                </option>

                                <option value="support">
                                    دعم تقني
                                </option>

                                <option value="other">
                                    أخرى
                                </option>

                            </select>

                        </div>
                        <div class="mb-4">
                            <label for="contactMessage"
                                   class="form-label fw-semibold">
                                الرسالة
                                <span class="text-danger">*</span>

                            </label>

                            <textarea id="contactMessage"
                                      name="message"
                                      class="form-control text-end"
                                      rows="5"
                                      placeholder="اكتب رسالتك هنا..."></textarea>

                            <div class="invalid-feedback">
                                يجب أن تحتوي الرسالة على 10 أحرف على الأقل
                            </div>

                        </div>
                        <!-- زر الإرسال -->
                        <button type="button"
                                class="btn btn-primary px-5"
                                onclick="validateContactForm()">

                            إرسال الرسالة
                            <i class="bi bi-send ms-2"></i>
                        </button>

                    </div>

                </div>

            </div>
            <div class="col-md-5 text-end">

                <h4 class="fw-bold mb-4">
                    وسائل التواصل الأخرى
                </h4>

                <div class="d-flex flex-column gap-4">
                    <div class="d-flex gap-3 align-items-start">

                        <div class="bg-primary text-white rounded-3 p-3">
                            <i class="bi bi-envelope-fill fs-4"></i>
                        </div>

                        <div>
                            <h6 class="fw-semibold mb-1">
                                البريد الإلكتروني
                            </h6>

                            <p class=" mb-0">info@svuonline.org.
                            </p>
                            <p class=" mb-0">
                                Support@svuonline.org
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-start">

                        <div class="bg-success text-white rounded-3 p-3">
                            <i class="bi bi-telephone-fill fs-4"></i>
                        </div>

                        <div>
                            <h6 class="fw-semibold mb-1">
                                الهاتف
                            </h6>

                            <p class=" mb-0 rtl">
                                00963112113469
                        </p>

                            <p class=" mb-0">
                                الأحد - الخميس
                            </p>
                        </div>

                    </div>
                    <div class="d-flex gap-3 align-items-start">

                        <div class="bg-warning text-dark rounded-3 p-3">
                            <i class="bi bi-geo-alt-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1">
                                العنوان
                            </h6>

                            <p class=" mb-0">
                                مكتب شؤون الطلاب
                            </p>

                            <p class=" mb-0">
                               مقر الجامعة الافتراضية عند مركز التعليم والتدريب الاذاعي
                            </p>

                            <p class=" mb-0">
                               سوريا _ دمشق جانب كلية الاداب اوتستراد المزة
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-start">

                        <div class="bg-info text-white rounded-3 p-3">
                            <i class="bi bi-clock-fill fs-4"></i>
                        </div>

                        <div>
                            <h6 class="fw-semibold mb-1">
                                أوقات الدوام
                            </h6>

                            <p class=" mb-0">
                                الأحد - الخميس
                            </p>

                            <p class=" mb-0">
                                10:00 صباحاً - 1:00 ظهرا
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>