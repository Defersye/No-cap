SELECT
  ordered_books.user_id,
  users.name,
  ordered_books.order_id,
  ordered_books.order_time,
  books.book_id,
  books.name
FROM ordered_books 
JOIN users ON users.user_id = ordered_books.user_id 
JOIN books ON books.book_id = ordered_books.book_id;