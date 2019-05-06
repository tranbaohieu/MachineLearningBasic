import numpy as np
def dist(a, b):
    # YOUR CODE HERE
    return np.linalg.norm(a-b,2)
    pass

a=np.array([1,2])
b=np.array([2,3])
print(dist(a,b))