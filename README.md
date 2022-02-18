## Yêu cầu
- laravel 9
- php 8.0 trở lên
- mysql

## source ứng tuyển PHP dev

Cách giải cá nhân:
-	Lọc ra ngẫu nhiên 100 người có mã dự thưởng chiến thắng để nhận 100 phần thưởng.
-	100 giải được trao lần lượt (vòng lặp)
-	Đối với giải thưởng iphone,
    o	Chia ra 2 khối nhân viên: khối 1 nhân viên cửa hàng 1 và khối 2 nhân viên còn lại 
    o	Giải thưởng iphone sẽ được ngẫu nhiên rơi vào 1 trong 2 khối.( tỉ lệ khối 1 > 10% khối 2)
    o	Sau khi xác định được khối trao thưởng, tiếp tục chọn 1 nhân viên ngẫu nhiên trong khối và trao giải, và loại nhân viên  này ra khỏi danh sách chưa nhận thưởng.
-	Đối với giải thưởng khác thì chia đều ngẫu nhiên cho tất cả các nhân viên chưa nhận giải, và loại nhân viên  này ra khỏi danh sách chưa nhận thưởng.
-	Việc nhập mã dự thưởng để kiểm tra hoạt động sau khi đã chạy code trao giải thưởng xong.


Vấn đề:
-	Nếu từng nhân viên tự quay thưởng thì các lượt quay đầu tiên sẽ cơ hội nhận nhiều giải hơn, về sau các giải sẽ ít dần và cơ hội nhận giải không còn. Không còn sự công bằng theo thời điểm. Nên phải quay thưởng 1 lần cho tất cả nhân viên.
-	Nhân viên chỉ có thể kiểm tra kết quả vì kết quả đã được hệ thống chạy từ trước.


Giả định:
-	Nếu nhân viên có từ 2 mã dự thưởng trở lên chưa được nêu ở đề bài.

## Cách demo
- database name: laravel
- Run test: http://127.0.0.1:8000/
- click button Create DB. (migrate database)
- Nhập mã dự thưởng và click nhận kết quả.