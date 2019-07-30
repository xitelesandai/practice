def tree(root_label, branches=[]):
    for branch in branches:
        assert is_tree(branch), 'branches must be trees'
    return [root_label] + list(branches)


def label(tree):
    return tree[0]


def branches(tree):
    return tree[1:]


def is_tree(tree):
    if type(tree) != list or len(tree) < 1:
        return False
    for branch in branches(tree):
        if not is_tree(branch):
            return False
    return True


def is_leaf(tree):
    return not branches(tree)


t = tree(3, [tree(1), tree(2, [tree(1), tree(1)])])
print(label(t))
print(branches(t))
print(label(branches(t)[1]))
print(is_leaf(t))
print(is_leaf(branches(t)[0]))
