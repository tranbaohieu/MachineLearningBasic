
import cv2
import numpy as np
from cv2 import imread
img=cv2.imread('woman.jpg',1)
cv2.line(img,(0,0),(400,300),(255,0,0),5)
cv2.imwrite('dave.jpg',img)
img2=cv2.imread('dave.jpg',1)  
cv2.imshow('image',img2)
cv2.waitKey();
cv2.destroyAllWindows();