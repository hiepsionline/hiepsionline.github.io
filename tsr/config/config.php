<?php
/**
 * @package Cấu hình Thẻ siêu rẻ
 *
 * @author Vinh Developer | Ske Software | Phạm Vinh ID
 *
 * @see Lưu ý: Token captcha phải được lấy chính xác thì mới có thể đăng nhập được vào tài khoản ! Cách lấy xin liên hệ Zalo: 0931562864 - Vinh Developer hoặc xem trong phần Hướng dẫn
 *
 * @method Nếu lỗi đăng nhập: Mã xác nhận không chính xác thì token captcha bị sai và phải lấy lại
 */
namespace SkeSoft;
class Config {
	// Ghi lại nhật ký hoạt động (true nếu có hoặc false nếu không)
	public const LOGGING = true;

	// Cài đặt tài khoản (bắt buộc)
	public const TSR_USERNAME = 'tk'; // Username tài khoản thẻ siêu rẻ
	public const TSR_PASSWORD = 'mk'; // Mật khẩu thẻ siêu rẻ

	// Tự động xóa file lưu cookie (true nếu bật hoặc false nếu tắt, khuyến khích nên để false)
	public const AUTO_DELETE_COOKIE = false; // Tính năng này sẽ lưu cookie tài khoản trong 1 thời gian dài để đăng nhập không cần captcha token, nếu bạn đổi tài khoản tsr bắt buộc phải xóa cookie. Cách xóa cookie xem trong hướng dẫn.

	// Token captcha ở thẻ siêu rẻ (bắt buộc, cách lấy token ở hướng dẫn)
	public const G_CAPTCHA_CODE = '03AGdBq26HFzThr1uOkqCVpKRBi6JmYRLflpXIHEFzleiEktpDwSOhq_BjgxTBNZ6_06_6MQt2snJFNiaC4imJUjTASt4W4eB11to0DGM83j1zzggVErx4u6oQcMXrvyxXWMXLN8pdsAsFsi693AUM1zmr3q7erqHg8HJs0HlzJY9dgh2UPh1QQgFGLN2W42JHD9SpOiWoPs5Mpg5vl_GQzj9LuGWDz8hQxvZdecGirNpn0YI6-Sr6-iHOHJK_-kwxDbsIeJ2qBTA6WimV5pqnMzhXKieI7qgY35xly57-uSXexJAA_3DebVBT09uXqR9ucuTcRIaqYEk71JTVlNbIGRnAOYwFKAxfTVpyogP_k7GY3BIijgEP2f10dtWrKwKgknoSCr526ccZh1bJ4On2l52JSdsyM2XrA_u5nP3X_wgpX6dWU3UHGThbs5f50TRcCWQtzROVseB1t7lFEfi6LXeGEX4jLQKmRA';
}