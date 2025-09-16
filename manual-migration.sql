-- Manual migration SQL for adding 'kurta & pajama' to category enum
-- Run this in phpMyAdmin or your database management tool

-- Step 1: Modify the enum column to include the new option
ALTER TABLE details MODIFY COLUMN category ENUM('kameez/shalwar','kameez','shalwar','kurta & pajama');

-- Step 2: Insert migration record to Laravel's migrations table
INSERT INTO migrations (migration, batch) 
VALUES ('2025_09_15_145911_add_kurta_pajama_to_category_enum', 
        (SELECT COALESCE(MAX(batch), 0) + 1 FROM migrations m));
