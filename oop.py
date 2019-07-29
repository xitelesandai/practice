# region 面向对象setter,getter方法
# class Company(object):
#     def __init__(self, department, job):
#         self._department = department
#         self._job = job
#
#     # 如果没有getter,setter方法。在外部对受保护属性进行赋值是没有效果的(代码7-24行)
#     @property
#     def department(self):
#         return self._department
#
#     @property
#     def job(self):
#         return self._job
#
#     @department.setter
#     def department(self, department):
#         self._department = department
#
#     @job.setter
#     def job(self, job):
#         self._job = job
#
#     def dowhatjob(self):
#         print('%s部门做%s的工作' % (self._department, self._job))
#
#
# def main():
#     company = Company('IT', '写代码')
#     company.dowhatjob()
#     company.department = '门店事业'
#     company.job = '招商'
#     company.dowhatjob()
# endregion 面向对象setter,getter方法
from math import sqrt


class Triangle(object):

    def __init__(self, a, b, c):
        self._a = a
        self._b = b
        self._c = c

    @staticmethod
    def is_valid(a, b, c):
        return a + b > c and b + c > a and a + c > b

    def perimeter(self):
        return self._a + self._b + self._c

    def area(self):
        half = self.perimeter() / 2
        return sqrt(half * (half - self._a) *
                    (half - self._b) * (half - self._c))


def main():
    a, b, c = 3, 4, 5
    # 静态方法和类方法都是通过给类发消息来调用的
    if Triangle.is_valid(a, b, c):
        t = Triangle(a, b, c)
        print(t.perimeter())
        # 也可以通过给类发消息来调用对象方法但是要传入接收消息的对象作为参数
        # print(Triangle.perimeter(t))
        print(t.area())
        # print(Triangle.area(t))
    else:
        print('无法构成三角形.')


if __name__ == '__main__':
    main()
