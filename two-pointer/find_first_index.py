class Solution:
    def strStr(self, haystack: str, needle: str) -> int:
        needlelen = len(needle)
        for i in range((len(haystack) - needlelen) +1):   
            if(haystack[i:needlelen] == needle):
                return i
                break
            needlelen += 1

        return -1