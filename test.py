# 数据结构：
# 1、字符串
# 2、列表

# 列表
# 函数：len(列表)--计算列表长度
# 函数：append(值)--列表末尾追加元素
# 函数：insert(位置,值)--列表指定位置插入元素
# 函数：remove(位置)--列表指定位置删除元素
# 函数：clear()--清空列表元素
# 函数：sorted(列表，排序方式)--sorted函数返回列表排序后的拷贝不会修改传入的列表
fruits = ['grape', 'apple', 'strawberry', 'waxberry']
fruits += ['pitaya', 'pear', 'mango']
# 循环遍历列表元素
fruit3 = fruits[:]
print(fruit3[1])
