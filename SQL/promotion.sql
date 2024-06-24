INSERT INTO `promotion` (`id`, `name`, `type`, `adjustment`, `criteria`) VALUES
    (1, 'Half price', 'date_range_multiplier', '0.5', '{\"to\": \"2024-11-28\", \"from\": \"2024-01-01\"}'),
    (2, 'Voucher 22ER', 'fixed_price_voucher', '10', '{\"code\": \"10EUR\"}');
